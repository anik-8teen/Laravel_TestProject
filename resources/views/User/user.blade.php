<!DOCTYPE html>
<head>
</head>
<body>
    <form action="post">
        @csrf
        <input type="text" id="title" name="title" placeholder="title">
        <input type="text" id="description" name="description" placeholder="description">
      
      
        <input type="text" id="start_date" name="start_date" placeholder="start Date">
        
        
    <input type="text" id="end_date" name="end_date" placeholder="end Date">
    <br>

    <input type="checkbox" id="developer1" name="developer1" value="">
<label for="Developer1"> Developer1</label>

<input type="checkbox" id="developer2" name="developer2" value="">
<label for="developer2"> developer2</label>

<input type="checkbox" id="developer3" name="developer3" value="">
<label for="developer3"> developer3</label>

<input type="checkbox" id="developer4" name="developer4" value="">
<label for="developer3"> developer4</label>
<br>
    <input type="submit" id='save' name='save'>
    </form>

</body>
</html>