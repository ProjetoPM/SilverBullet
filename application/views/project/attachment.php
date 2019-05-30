<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>
</head>
<body>

<div class="gallery">
    <a target="_blank" href="<?=base_url()?>assets/images/lesse_logo.png">
        <img src="<?=base_url()?>assets/images/lesse_logo.png" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
</div>