
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
    </div>
<div class="create-post-content">
    <div class="post-form"> 
        <h2>Add new post</h2>
    <form action="create-post.php">
        <label for="title">Post title</label> <br>
        <input type="text" name="title"> <br>
        <label for="content">Post content</label>
        <textarea name="content" id="content-post" cols="30" rows="10"></textarea><br>
        <button type="submit" name="submit" value="submit">Save</button>
    </form>

    </div>
</div>

<?php 
    include 'footer.php'
?>
</body>
</html>