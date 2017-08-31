#!/usr/bin/perl
use CGI;

$client = CGI->new();
$name = $client->param('user');
print "Content-Type: text/html\n";

if ($name eq '') { $greeting = "Who are you?"; }
else { $greeting = "Well, hello there, $name."; }

print "
<!DOCTYPE html>
<html>
    <body>
        <h1>$greeting</h1>
    </body>
</html>";