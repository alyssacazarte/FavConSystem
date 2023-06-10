<form action="" method="POST">
    @csrf
    <input type="text" name="servicetype" placeholder="Service Type"> <br> <br>
    <input type="text" name="servicedescription" placeholder="Service Description"> <br> <br>
    <input type="text" name="serviceduration" placeholder="Service Duration"> <br> <br>
    <button type="submit">Add Service</button>
</form>