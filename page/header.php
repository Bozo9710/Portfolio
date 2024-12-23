<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        header {
    top: 0px;
    position: fixed;
    background:linear-gradient(to right, #ff6347, #00bcd4); 
    color: #fff;
    padding: 30px 20px;
    width: 80vw;
    left: 9.6vw;
    border-radius: 25px;
    margin-top: 50px;
    display: flex ; 
    justify-content: center;
    z-index: 40;
}
    header nav a {
        text-decoration: none;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size:20pt;
        color: #fff;
        padding: 70px;
        font-weight:bolder;
        transition: color  0.3s ease;
        padding: 20px 40px ; 
    }

    header nav a:hover {
    color: rgb(115, 115, 202)
    }

    </style>
</head>
<body>
<header>
        <nav>
            
                <a href="#accueil">Accueil</a>
                <a href="#competences">Compétences</a>
                <a href="#realisations">Réalisations</a>
                <a href="#formations">Formations</a>
                <a href="#contact">Contact</a>
            
        </nav>
    </header>