<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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
                        <option value="2">2 Images</option>
                        <option value="3">3 Images</option>
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
        <div class="img-card ">
            <img src="Images/pexels-pixabay-33045.jpg" alt="image">
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
    <script src="script.js"></script>
</body>

</html>