<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="image-generater">
        <div class="content">
            <h1>Image Generate Tool</h1>
            <p>Convert your text into an image within a second using this
                JavaScript-powered AI Image Generator tool.
            </p>
            <form action="#" class="generate-form">
                <input type="text" class="prompt-input" placeholder="Describe what you want to see">
                <div class="controls">
                    <select class="img-quantity">
                        <option value="1">1 Image</option>
                        <option value="2">2 Image</option>
                        <option value="3">3 Image</option>
                        <option value="4" selected>4 Images</option>
                    </select>
                    <button type="submit" class="generate-btn">Generate</button>
                </div>
            </form>
        </div>
    </section>
    <section class="image-gallery">
        <div class="img-card">
            <img src="Images/img-1.jpg" alt="image">
            <a href="#" class="download-btn">
                <img src="Images/downloads.png" alt="download icon">
            </a>
        </div>
        <div class="img-card loading">
            <img src="Images/loading.png" alt="image">
            <a href="#" class="download-btn">
                <img src="Images/downloads.png" alt="download icon">
            </a>
        </div>
        <div class="img-card">
            <img src="Images/pexels-pixabay-326055.jpg" alt="image">
            <a href="#" class="download-btn">
                <img src="Images/downloads.png" alt="download icon">
            </a>
        </div>
        <div class="img-card">
            <img src="Images/pexels-rpnickson-2486168.jpg" alt="image">
            <a href="#" class="download-btn">
                <img src="Images/downloads.png" alt="download icon">
            </a>
        </div>
    </section>
</body>

</html>