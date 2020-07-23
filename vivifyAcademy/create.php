
<body>
<?php 
    include 'header.php'
?>
<main role="main" class="container">
    <div class="table-content">
        <table style="width:500px; margin-left:300px; margin-bottom: 10px; ">
            <tr>
                <th>NAME</th>
                <th>OPTION</th>
            </tr>
            <tr>
                <td>POST TITLE</td>
                <td>EDIT DELETE</td>
            </tr>
            <tr>
                <td>POST TITLE</td>
                <td>EDIT DELETE</td>
            </tr>
        </table>
    </div> <br>
<div class="create-post-content">
    <div class="post-form"> 
        <h2>Add new post</h2>
    <form action="create-post.php" method="POST" >
        <label for="title">Post title</label> <br>
        <input type="text" name="title"> <br>
        <label for="body">Post content</label> <br>
        <textarea name="body" id="content-post" cols="30" rows="10"></textarea><br>
        <label for="author">Author</label> <br>
        <input type="text" name="author"> <br>
        <label for="created_at">Created_at</label> <br>
        <input type="date" name="created_at"> <br> <br>
        <input  class="btn btn-default" type="submit" name="submit" value="Submit">
    </form>


    </div>
</div>

<?php 
    include 'footer.php'
?>
</body>
</html>