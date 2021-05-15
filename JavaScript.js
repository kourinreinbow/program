var fs=new ActiveXObject("Scripting.FileSystemObject");

var file=fs.CreateTextFile("text.txt");

file.Write("Complete, written!");

file.Close();