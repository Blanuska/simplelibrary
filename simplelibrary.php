<!DOCTYPE html>
<html lang="cs-cz">
        <head>
  <meta charset="utf-8">
  <title>informační systém knihovny</title>
        </head>

<body>
<h1> Katalogizační systém <h1/>
<form  method="post" >
        Jméno autora:<input type="text" name="Autor" size="50" autocomplete="on" /><br/>
        Název:<input type="text" name="Název knihy" size="50" /><br/>
        Žánr:<br/>
             <label><input type="radio" name="radio">
                    <span>naučné</span></label><br/>
             <label><input type="radio" name="radio">
                    <span>beletrie</span></label><br/>
             <label><input type="radio" name="radio">
                    <span>slovníky</span></label><br/>
        Druh:<select name="Druh">
             <span>Dropdown</span>
             <option>kniha</option>
             <option>cd</option>
             <option>mapa</option>
             <option>časopis</option>
             </select><br/>     
        Rok: <input type="text" name="Rok">     
        Nakladatelství: <input type="text" name="Nakl." autocomplete="on" /><br/>
        ISBN:<input type="text" name="ISBN"/><br />
        Anotace:<br/>
        <textarea cols="40" rows="8" name="Popis knihy"></textarea><br/>
        Kl. slova:<input type="text" name="KLíčová slova" size="maxlenght"/><br />
        <input type="submit"/>
        <button name="Vyprázdnit" type="reset" value="" <b>Vyprázdnit</b>
                </button><br/>	
</form>  

</body>
</html>