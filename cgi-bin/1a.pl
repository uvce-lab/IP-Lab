#! /usr/bin/perl

print "Content-Type: text/html\n";

$message = "
<!DOCTYPE html>
<html lang='en'>
    <body>
        <h1 class='text-center my-heading'>Server Details</h1>
        <ul>
            <li><strong>Server Name:</strong> $ENV{'SERVER_NAME'}</li>
            <li><strong>Port:</strong> $ENV{'SERVER_PORT'}</li>
            <li><strong>Server Software:</strong> $ENV{'SERVER_SOFTWARE'}</li>
            <li><strong>Server Protocol:</strong> $ENV{'SERVER_PROTOCOL'}</li>
            <li><strong>CGI Version:</strong> $ENV{'GATEWAY_INTERFACE'}</li>
            <li><strong>Root Document:</strong> $ENV{'DOCUMENT_ROOT'}</li>
        </ul>
    </body>
</html>
";

print $message;