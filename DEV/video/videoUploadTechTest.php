
<div class="body">
<div id="topBanner">
<h1>Upload Video</h1>
</div>
<link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=PT+Sans&family=Pacifico&family=Permanent+Marker&family=Quicksand&family=Righteous&family=Rubik:wght@300&family=Staatliches&display=swap"
        rel="stylesheet">
<div id="content">
<form method="POST" action="/video/videoUploader.php" enctype="multipart/form-data">
    Video file: <input id="uploadVideo" type="file" name="videoFile">
    <br>
    Thumbnail file: <input id="uploadImage" type="file" name="imageFile">
    <br>
    Title: <input type="text" id="textbox" name="videoName" placeholder="Video Title">
    <br>
    Description: <textarea type="text" id="textboxBig" name="videoDescription" placeholder="Video Description"></textarea>
    <br>
    Category: <select id="optionBox" name="videoCategory">
                    <option value="entertainment">Entertainment</option>
                    <option value="tech">Technology</option>
                    <option value="film">Film</option>
                    <option vlaue="gaming">Gaming</option>
              </select>  
                    <br>
     <button id="submit" type="submit" name="submit">Submit</button>
    </form>
</div>
</div>
<style>
.body {
    padding: 50px;
    height: 100%;
    font-family: "Bebas Neue";
    background-color: rgba(240, 240, 240);
}
#topBanner {
    border-radius: 10px;
    font-family: "Bebas Neue";
    text-align: center;
    font-size: 40px;
    padding: 15px;
    box-shadow: 4px 6px 5px 0px rgba(0,0,0,0.75);
    background-color: rgba(240, 240, 240);
    background-color: white;
}

#content {

    margin-top: 20px;
    background-color: white;
    font-size: 25px;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 4px 6px 5px 0px rgba(0,0,0,0.75);
}

#textBoxBig {
    resize: none;
    width: 100%;
    height: 20%;
}
</style>

