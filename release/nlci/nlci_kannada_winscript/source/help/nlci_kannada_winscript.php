<?php
  $pagename = 'Kannada WinScript (NLCI) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    samp {font-family: Noto Sans Kannada; font-size:20pt;   }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

    <p>This keyboard mimics Kannada WinScript Keyboard Layout designed by NLCI in 1988. Several linguists and members of translation community are still using this keyboard layout for keyboarding the text. This is a phonetic based keyboarding system designed with the objective of keyboarding text with minimal keystrokes. Keys are also layed out according the frequency of occurance, yet tried to follow a phonetic based keyboarding system.</p>

<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<h2>Mobile/Tablet Keyboard Layout</h2>
<p>Due to the size and number of keys, some characters are hidden in the long press. 
	Press and hold on the key with a little dot on the top right to reveal and use them. The keys that are on the RALT layers can be found on the equivalent longpress key. For example, <i>avagraha</i> is on the RALT+QUOTE key. It is on the longpress for the QUOTE key.</p>

<div id='osk-tablet' data-states='default shift'>
</div>
   
    <h2>Input sequences</h2>
    
	 <table class="inputSequences">
	 <h3>Special cases</h3>
   
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>e</kbd><kbd>e</kbd> </td>
                <td>ಏ</td>
                
            </tr>
            <tr>
                <td><kbd>i</kbd><kbd>i</kbd>  </td>
                <td>ಈ</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ಳ</td>
                
            </tr>
            <tr>
                <td><kbd>l</kbd><kbd>l</kbd><kbd>l</kbd>  </td>
                <td>ೞ</td>
                
            </tr>
            <tr>
                <td><kbd>L</kbd><kbd>L</kbd>  </td>
                <td>ೞ</td>
                
            </tr>
           
            
            <tr>
               <td><kbd>o</kbd><kbd>o</kbd>  </td>
                <td>ಓ</td>
               
            </tr>
            <tr>
                <td><kbd>r</kbd><kbd>r</kbd>  </td>
                <td>ಱ</td>
                
            </tr>
            <tr>
                <td><kbd>R</kbd><kbd>R</kbd>  </td>
                <td>ೠ</td>
                
            </tr>
			
			
			
			<tr>
               <td><kbd>u</kbd><kbd>u</kbd>  </td>
                <td>ಊ</td>
                
            </tr>
			
			<tr>
               <td><kbd>s</kbd><kbd>s</kbd>  </td>
                <td>ಶ</td>
            </tr>
			<tr>
               <td>consonant <kbd>i</kbd>  </td>
                <td>&#x0CBF;</td>
            </tr>
			<tr>
               <td>consonant <kbd>R</kbd>  </td>
                <td>&#x0CC3;</td>
            </tr>
			<tr>
               <td>consonant <kbd>R</kbd> <kbd>R</kbd>  </td>
                <td>&#x0CC4;</td>
            </tr>
			<tr>
               <td><kbd>RAlt</kbd><kbd>&#x0027;</kbd></td>
                <td>&#x0CBD;</td>
            </tr>
			<tr>
               <td><kbd>L</kbd><kbd>l</kbd></td>
                <td>&#x0CDE;</td>
            </tr>
			
			
        </tbody>
    </table>

    
     <h3>Virama</h3>

    <p> <kbd>X</kbd> is used as virama Eg <kbd>k</kbd> <kbd>X</kbd>  will generate <samp>ಕ್‌</samp></p>
	
	<h3>Using = </h3>
	
      <table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>=</kbd><kbd>r</kbd> </td>
                <td>ಱ</td>
                
            </tr>
            <tr>
                <td><kbd>=</kbd><kbd>z</kbd> </td>
                <td>ೞ</td>
                
            </tr>
</tbody>
    </table>
	
	<h3>Vowel Sign Elongation</h3>
	
      <table class="inputSequences">
        <thead>
            <tr>
                <th>Keys</th>
                <th>Character</th>
              
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><kbd>ಿ</kbd><kbd>i</kbd> </td>
                <td>ೀ</td>
                
            </tr>
            <tr>
                <td><kbd>ು</kbd><kbd>u</kbd> </td>
                <td>ೂ</td>
                
            </tr>
			 <tr>
                <td><kbd>ಾ</kbd><kbd>a</kbd> </td>
                <td>ಾ</td>
                
            </tr>
</tbody>
    </table>
	
	
	
	 <h3>Conjuncts</h3>

    <p> <kbd>x</kbd> is used as conjuncts Eg <kbd>k</kbd> <kbd>x</kbd> <kbd>l</kbd> will generate <samp>ಕ್ಲ</samp></p>
    
	<h3>Numbers</h3>

    <p> <kbd>`</kbd> Backtick with number will get Kannada number Eg <kbd>`</kbd> <kbd>1</kbd> will generate <kbd>೧</kbd></p>  

	<h3>Backtick for change into English</h3>

    <p> <kbd>`</kbd> Backtick is used to change into English Eg <kbd>`</kbd> <kbd>ತ</kbd> will generate <kbd>q</kbd></p>  

