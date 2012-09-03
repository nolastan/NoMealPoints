<?php


dates_to_ical($meal);

// Set headers
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=meal.ics");
header("Content-Type: iCalendar");
header("Content-Transfer-Encoding: binary");
?>
BEGIN:VCALENDAR
PRODID:-//NoMealPoints//NONSGML No Meal Points v0.1//EN
X-ORIGINAL-URL:<?php echo site_url('meal/'.$meal->id); ?>

VERSION:2.0
CALSCALE:GREGORIAN
METHOD:PUBLISH
BEGIN:VEVENT
DTSTAMP:20091211T022410Z
LAST-MODIFIED:20091211T022410Z
CREATED:20091203T203242Z
SEQUENCE:625888
ORGANIZER:<?php echo $meal->intended; ?>

DTSTART:<?php echo $meal->start; ?>

DTEND:<?php echo $meal->end; ?>

UID:<?php echo $meal->id; ?>

SUMMARY:<?php echo $meal->title; ?>

LOCATION:<?php echo $meal->location; ?>

URL:<?php echo site_url('meal/'.$meal->id); ?>

DESCRIPTION:<?php echo $meal->info; ?>

CLASS:<?php if($meal->private) echo "PRIVATE"; else echo "PUBLIC"; ?>

CATEGORIES:
STATUS:CONFIRMED
PARTSTAT:NEEDS-ACTION
END:VEVENT
END:VCALENDAR