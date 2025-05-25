<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice Exercise</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #3a4750;
            color: white;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            padding: 25px;
            border-radius: 10px;
            position: relative;
            min-height: 180px;
        }

        .card-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .card-description {
            font-size: 0.95rem;
            line-height: 1.4;
            color: #2c3e50;
        }

        
        .card-1 {
            background-color: #a4d65e;
        }
        .card-1 .card-number {
            background-color: #2c3e50;
            color: white;
        }

        
        .card-2 {
            background-color: #f1c40f;
        }
        .card-2 .card-number {
            background-color: #e91e63;
            color: white;
        }

        
        .card-3 {
            background-color: #2ecc71;
        }
        .card-3 .card-number {
            background-color: #27ae60;
            color: white;
        }

        
        .card-4 {
            background-color: #3498db;
        }
        .card-4 .card-number {
            background-color: #2980b9;
            color: white;
        }

        
        .card-5-top {
            background-color: #5dade2;
        }
        .card-5-top .card-number {
            background-color: #3498db;
            color: white;
        }

        
        .card-6 {
            background-color: #e67e22;
        }
        .card-6 .card-number {
            background-color: #d35400;
            color: white;
        }

        
        .bottom-card {
            grid-column: 1 / -1;
            background-color: #e67e22;
            margin-top: 0;
        }
        .bottom-card .card-number {
            background-color: #8e44ad;
            color: white;
        }

        .button {
            background-color: #bdc3c7;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            color: #2c3e50;
            font-weight: bold;
            margin-top: 15px;
            cursor: pointer;
        }

        .textarea {
            width: 100%;
            height: 60px;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            padding: 10px;
            color: #2c3e50;
            font-family: monospace;
            margin-top: 10px;
            resize: none;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
            
            .main-title {
                font-size: 2.5rem;
            }
            
            .card {
                min-height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="main-title">jQuery Practise Exercise</h1>
        
        <div class="grid">
            
            <div class="card card-1">
                <div class="card-number">1</div>
                <div class="card-title">J Show/Hide text on button click</div>
                <div class="card-description">Show/Hide text on an button click - form button - under an a paragraph.</div>
                <button class="button">Charce</button>
            </div>

            
            <div class="card card-2">
                <div class="card-number">2</div>
                <div class="card-title">Text ifbory Lisell ratlekits</div>
                <div class="card-description">Change: bictloents Lulor, Ftorn Charagi and Drom attvm for Fearoh Calor.<br><br>
                Moueo darose balk recjgoe tnil for remonble that can Searce. List to uping or this Papherster by deceset and ogoole.</div>
            </div>

            
            <div class="card card-3">
                <div class="card-number">3</div>
                <div class="card-title">Form backading julor</div>
                <div class="card-description">For charretten comic color share Patlicts forn chinner - a free changing aries.</div>
            </div>

            
            <div class="card card-4">
                <div class="card-number">4</div>
                <textarea class="textarea">nellcaren [
noke  7  3, 2</textarea>
            </div>

            
            <div class="card card-5-top">
                <div class="card-number">3</div>
                <div class="card-title">J choring filest as your fulfire</div>
                <div class="card-description">The lis character courter ul to the velleplies of the for orhete be lowde.</div>
            </div>

            
            <div class="card card-6">
                <div class="card-number">5</div>
                <div class="card-title">J low Lise irtine rc itents</div>
                <div class="card-description">for at wcal you go to dis lrats, it.</div>
            </div>
        </div>

        
        <div class="card bottom-card">
            <div class="card-number">5</div>
            <div class="card-title">J Filter List ist items</div>
            <div class="card-description">- a filtreng litench by Search box.</div>
        </div>
    </div>
</body>
</html>