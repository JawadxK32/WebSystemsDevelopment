#!/usr/bin/perl
use CGI':standard';
use strict;
print "Content-type: text/html\n\n";


print '<link rel="stylesheet" href="../perlcss.css" charset="utf-8">';

my $fname = param('firstname');
my $lname = param('lastname');
my $progstartyear = param('progstartyear');
my $prog = param('prog');

print '<h2 class="perly";>You have submitted the following information:</h2>';

print "<p>";
print "<b>First Name</b>: $fname<br>";
print "<b>Last Name</b>: $lname<br>";
print "<b>Programming Start Year: </b> $progstartyear<br>";

if ($prog eq "on"){
	print "You like programming.";
}
else{
	print "You do not like programming.;
}

print "</p>";