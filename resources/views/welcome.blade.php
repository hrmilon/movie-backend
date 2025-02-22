<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel API Documentation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2d3748;
            /* bg-gray-800 */
            color: #e2e8f0;
            /* Light text for dark background */
            margin: 0;
            padding: 20px;
            line-height: 1.6;
            font-size: 14px;
            /* Smaller font size */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #4a5568;
            /* bg-gray-700 */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #81e6d9;
            /* teal-300 */
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #63b3ed;
            /* blue-400 */
            border-bottom: 2px solid #4299e1;
            /* blue-500 */
            padding-bottom: 5px;
            margin-top: 30px;
        }

        pre {
            background: #1a202c;
            /* bg-gray-900 */
            color: #cbd5e0;
            /* Light text for dark background */
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }

        code {
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
            /* Smaller font size for code */
        }

        .endpoint {
            margin-bottom: 30px;
        }

        .endpoint pre {
            background: #2d3748;
            /* bg-gray-800 */
            color: #cbd5e0;
            /* Light text for dark background */
            padding: 10px;
            border-radius: 5px;
        }

        .request,
        .response {
            margin-bottom: 30px;
        }

        .request pre,
        .response pre {
            margin: 10px 0;
        }

        .response pre {
            background: #2d3748;
            /* bg-gray-800 */
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #a0aec0;
            /* gray-400 */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Laravel API Documentation</h1>

        <div class="endpoint">
            <h2>Endpoint</h2>
            <pre><code>POST /api/movie</code></pre>
        </div>

        <div class="request">
            <h2>Request Body</h2>
            <pre><code>{
    "mood": "sad",
    "genre": "action",
    "told": "i am desperate"
}</code></pre>
        </div>

        <div class="response">
            <h2>Response</h2>
            <pre><code>{
  "data": [
    {
      "name": "John Wick",
      "year": "2014-10-22",
      "plot": "Ex-hitman John Wick comes out of retirement to track down the gangsters that took everything from him.",
      "genre": "",
      "ratings": 7.442,
      "poster": "https://image.tmdb.org/t/p/original/TxbvYS8wsgYSpYZtQLZXnoVOIQ.jpg"
    },
    {
      "name": "Mad Max",
      "year": "1979-04-12",
      "plot": "In the ravaged near-future, a savage motorcycle gang rules the road. Terrorizing innocent civilians while tearing up the streets, the ruthless gang laughs in the face of a police force hell-bent on stopping them.",
      "genre": "",
      "ratings": 6.7,
      "poster": "https://image.tmdb.org/t/p/original/5LrI4GiCSrChgkdskVZiwv643Kg.jpg"
    },
    {
      "name": "The Terminator",
      "year": "1984-10-26",
      "plot": "In the post-apocalyptic future, reigning tyrannical supercomputers teleport a cyborg assassin known as the \"Terminator\" back to 1984 to kill Sarah Connor, whose unborn son is destined to lead insurgents against 21st century mechanical hegemony. Meanwhile, the human-resistance movement dispatches a lone warrior to safeguard Sarah. Can he stop the virtually indestructible killing machine?",
      "genre": "",
      "ratings": 7.663,
      "poster": "https://image.tmdb.org/t/p/original/hzXSE66v6KthZ8nPoLZmsi2G05j.jpg"
    },
    {
      "name": "Die Hard",
      "year": "1988-07-15",
      "plot": "NYPD cop John McClane's plan to reconcile with his estranged wife is thrown for a serious loop when, minutes after he arrives at her offices Christmas Party, the entire building is overtaken by a group of terrorists. With little help from the LAPD, wisecracking McClane sets out to single-handedly rescue the hostages and bring the bad guys down.",
      "genre": "",
      "ratings": 7.798,
      "poster": "https://image.tmdb.org/t/p/original/1NnCbaFaWgHczKjH5Eii46VmpPp.jpg"
    },
    {
      "name": "Commando",
      "year": "1985-10-03",
      "plot": "John Matrix, the former leader of a special commando strike force that always got the toughest jobs done, is forced back into action when his young daughter is kidnapped. To find her, Matrix has to fight his way through an array of punks, killers, one of his former commandos, and a fully equipped private army. With the help of a feisty stewardess and an old friend, Matrix has only a few hours to overcome his greatest challenge: finding his daughter before she's killed.",
      "genre": "",
      "ratings": 6.693,
      "poster": "https://image.tmdb.org/t/p/original/ollPAAAgZ7euU8VisfqU3cuXhZ6.jpg"
    }
  ]
}</code></pre>
        </div>

        <div class="footer">
            Enjoy
        </div>
    </div>
</body>

</html>
