<?php header("Content-Type: iCalendar"); ?>
BEGIN:VCALENDAR
CALSCALE:GREGORIAN
METHOD:PUBLISH
PRODID:-//nomealpoints.com//NONSGML No Meal Points 0.1//
VERSION:2.0
X-WR-CALNAME:NoMealPoints
X-WR-CALDESC:Calendar containing free public meals at Wash U
X-WR-TIMEZONE;VALUE=TEXT:US/Central
<?php foreach($meals->result() as $meal): ?>
<?php dates_to_ical($meal); ?>
BEGIN:VEVENT
UID:<?php echo $meal->id;?>

CATEGORIES:meal
DESCRIPTION:<?php echo str_replace("\n", " ", $meal->info); ?>

DTSTART:<?php echo $meal->start; ?>

DTEND:<?php echo $meal->end; ?>

LAST-MODIFIED:<?php echo $meal->updated; ?>

LOCATION:<?php echo $meal->location;?>

SUMMARY:<?php echo $meal->title;?>

URL:<?php echo site_url('meal/'.$meal->id);?>

END:VEVENT
<?php endforeach; ?>
END:VCALENDAR
