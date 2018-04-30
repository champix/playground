hostname = UserInput( "Hostname ?", "php builtin server", "localhost" )
port = UserInput( "Port ?", "php builtin server", "8080" )
docroot = "./www/"

Set oShell = WScript.CreateObject("WSCript.shell")
oShell.run "php.exe -S " & hostname & ":" & port & " -t " & docroot

iURL = "http://" & hostname & ":" & port & "/" 
oShell.run(iURL)

Function UserInput( myPrompt, tit, def )
' This function prompts the user for some input.
' When the script runs in CSCRIPT.EXE, StdIn is used,
' otherwise the VBScript InputBox( ) function is used.
' myPrompt is the the text used to prompt the user for input.
' The function returns the input typed either on StdIn or in InputBox( ).
' Written by Rob van der Woude
' http://www.robvanderwoude.com
    ' Check if the script runs in CSCRIPT.EXE
    If UCase( Right( WScript.FullName, 12 ) ) = "\CSCRIPT.EXE" Then
        ' If so, use StdIn and StdOut
        WScript.StdOut.Write myPrompt & " "
        UserInput = WScript.StdIn.ReadLine
    Else
        ' If not, use InputBox( )
        UserInput = InputBox( myPrompt, tit, def )
    End If
End Function