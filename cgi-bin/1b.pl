#!/usr/bin/perl
use CGI;

print "Content-Type: text/html\n";

$client = CGI->new();
$command = $client->param('command');

if ((`which $command`) eq '')
{
    $value = "You entered an invalid Command.
    <br />
    <a href='/1b/'>Try Again</a>
    ";
}
else 
{
    $value = `$command`;
    $value = "
    <pre><code>$value</code></pre>
    ";
}

print "
<!DOCTYPE html>
<html>
    <body>
        <h1>\$ $command</h1>
        <div>$value</div>
  </body>
</html>";