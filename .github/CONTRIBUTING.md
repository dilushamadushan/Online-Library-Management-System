## Contributing

Hi there! We're thrilled that you'd like to contribute to this project. Your help is essential in keeping it great.

> [!IMPORTANT]  
> - Create new branch for your changes. make your changes there!
> - Do NOT add PR's to **main** branch.
> - Add PR's ONLY to **develop** branch.
> - File names and branch names should ONLY include simple letters.

## Folder Structure

1. root
   - assets
     - js
       - > add your js file
     - css
       - > add style sheet
     - media
       - home
       - admin-page
       - > make your section folder here for media
   - HTML's 
    > make your php document here for the use of otherts
    
## Theme Colors:

- Use these theme colors throughout:
  - Dark Red: rgb(70, 2, 2)
  - Yellow: rgb(255, 217, 0)
  
## Additional Notes:

The project already includes Bootstrap CSS/JS, LineIcons CDN, and Font Awesome CDN links in header.php and footer.php. Do not add these links again if you're using these files.

If you're including any custom CSS, ensure the link is placed within the header.php file.

```php
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- LineIcons CDN -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <!-- Header css link -->
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- Footer css link -->
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Index css link -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Your Css Link Name -->
    <link rel="stylesheet" href="assets/css/YOUR STYLE SHEET NAME.css">
</head>
```
If you're including any custom JS, ensure the link is placed within the footer.php file.

```php
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.7.1.js"></script>
<script src="assets/js/YOUR JS NAME"></script>
</body>
</html>

```

## Basic Template

### PHP

```php
<?php include("header.php") ?>

<body>
    <div class="sec">
        <h2><!-- YOUR SECTION TITLE GOES HERE --></h2>
        <hr>
            <!-- YOUR CODE GOES HERE -->
    </div>
</body>

<?php include("footer.php") ?>

```

### CSS

```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin:0; 
    padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
 }

/* section must include this */
.sec {
    position: relative;
    padding: 40px;
}

.sec h2{
    font-weight: 500;
    color: black;
    font-size: 30px;
    margin-bottom: 4px;
}
.sec hr {
    border: none;
    height: 2px;
    background-color: black;
    border-radius: 10px;
    margin-bottom: 20px;
}
```
