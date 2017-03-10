//task object test
$task1 = new task("email john","work","bookings");
echo "<br>".$task1->name;
echo $task1->stream;
var_dump( $task1->tags);
echo "<br>";
$task1->done();
echo $task1->fin;


echo "starting streams <br>";
print_r($current_streams);
$tags = ["admin","email"];

new_stream($current_streams, "BOB");
echo "<br>new set of streams<br>";

print_r($current_streams);
#print_r($tags);
//create substream
