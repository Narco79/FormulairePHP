<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8" />
    <title>Your first HTML form, styled</title>
    <style>
        form {
            /* Just to center the form on the page */
            margin: 0 auto;
            width: 400px;
            /* To see the outline of the form */
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        form li+li {
            margin-top: 1em;
        }

        label {
            /* To make sure that all labels have the same size and are properly aligned */
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,
        textarea {
            /* To make sure that all text fields have the same font settings By default, textareas have a monospace font */
            font: 1em sans-serif;
            /* To give the same size to all text fields */
            width: 300px;
            box-sizing: border-box;
            /* To harmonize the look & feel of text field border */
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            /* To give a little highlight on active elements */
            border-color: #000;
        }

        textarea {
            /* To properly align multiline text fields with their labels */
            vertical-align: top;
            /* To give enough room to type some text */
            height: 5em;
        }

        .button {
            /* To position the buttons to the same position of the text fields */
            padding-left: 90px;
            /* same size as the label elements */
        }

        button {
            /* This extra margin represent roughly the same space as the space between the labels and their text fields */
            margin-left: 0.5em;
        }
    </style>
</head>

<body>
    <form action="/thanks.php" method="post">
        <ul>
            <li>
                <label for="name">Name:</label>
                <input type="text" id="name" name="user_name" />
            </li>
            <li>
                <label for="firstname">Firstname:</label>
                <input type="text" id="firstname" name="user_firstname" />
            </li>
            <li>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" name="user_mail" />
            </li>
            <li>
                <label for="phone">Telephone:</label>
                <input type="tel" id="tel" name="user_phone" />
            </li>
            <label for="choix du sujet">Choisissez votre sujet</label>
            <select name="Sujet">
                <option value="sujet1">sujet1</option>
                <option value="sujet2">sujet2</option>
                <option value="sujet3">sujet3</option>
                <option value="sujet4">sujet4</option>
            </select>
            <li>
                <label for="msg">Message:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
            <li class="button">
                <button type="submit">Votre message</button>
            </li>
        </ul>
    </form>
</body>

</html>