<?php $this->set('title_for_layout', 'Calendar'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>
<?php $this->Html->css('fullcalendar', array('inline' => false, 'block' => 'page-css')) ?>
<?php $this->Html->css('fullcalendar.print', array('inline' => false, 'block' => 'page-css', 'media' => 'print')) ?>
<?php $this->Html->css('calendar', array('inline' => false, 'block' => 'page-css')) ?>
					<h1 class="pull-left"><?= __('Calendar') ?><small></small></h1>
				</div><!-- /pull-left -->
			</div>
		</div>
				<?php echo $this->Session->flash(); ?>
		<div class="row">
			<!-- Draggable Events
			<div class="col-md-3 hidden-xs hidden-sm">
				<div class="main-box" id="external-events">
					<header class="main-box-header clearfix">
						<h2>Draggable Events</h2>
					</header>

					<div class="main-box-body clearfix">
						<div class="external-event label-primary" data-eventclass="label-primary">My Event 1</div>
						<div class="external-event label-danger" data-eventclass="label-danger">My Event 2</div>
						<div class="external-event label-success" data-eventclass="label-success">My Event 3</div>
						<div class="external-event label-warning" data-eventclass="label-warning">My Event 4</div>
						<div class="external-event label-info" data-eventclass="label-info">My Event 5</div>
						<div class="external-event label-default" data-eventclass="label-default">My Event 6</div>
						<div class="form-group">
							<label class="checkbox-inline">
								<input type="checkbox" id="drop-remove" value="option1"> Remove after drop
							</label>
						</div>
					</div>
				</div>
			</div>
			 /Draggable Events -->
			<div class="col-md-9 maxW800">
				<div class="main-box">
					<div class="main-box-body clearfix">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			<?php if ($user['user_role_id'] == 1): ?>
				<div class="col-md-3">
					<div class="main-box">
						<div class="main-box-body">
							<div class="calendars form">
								<?php echo $this->Form->create('Calendar', array('action' => 'add')); ?>
									<fieldset>
										<legend><?php echo __('Add Calendar'); ?></legend>

										<?php echo $this->Form->input('title', array('class' => 'form-control', 'div' => 'form-group'));?>
										<?php echo $this->Form->hidden('allday', array('value' => 1));?>
										<div class="form-group">
											<label for=""><?= __('Date') ?></label>
											<?php echo $this->Form->date('start', array('class' => 'form-control'));?>
										</div>
										<?php echo $this->Form->input('day_type_id', array('class' => 'form-control', 'div' => 'form-group', 'options' => $day_types));?>
									</fieldset>
								<?php echo $this->Form->end(__('Submit')); ?>
								<hr>
								<li class="btn btn-primary"><?php echo $this->Html->link(__('Event List'), array('action' => 'view'), array('class' => 'white')); ?></li>
							</div>
						</div>
					</div>
			</div>
			<?php endif ?>
		</div>

	<!-- page-js -->
	<?php
		echo $this->Html->script('jquery-ui.custom.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('fullcalendar.min', array('inline' => false, 'block' => 'page-js'));
	?>

	<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	$(document).ready(function() {
		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events div.external-event').each(function() {

			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};

			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});


		/* initialize the calendar
		-----------------------------------------------------------------*/

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			firstDay: 1,
			isRTL: $('body').hasClass('rtl'), //rtl support for calendar
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: false,
			droppable: false, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped

				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');

				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);

				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;

				// copy label class from the event object
				var labelClass = $(this).data('eventclass');

				if (labelClass) {
					copiedEventObject.className = labelClass;
				}

				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}

			},
			events:	<?php echo $jsonEvents; ?>
		});

	});
	<?php $this->Html->scriptEnd(); ?>


</body>
</html>