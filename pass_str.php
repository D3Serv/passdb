<!DOCTYPE html

<head>
<script type="text/javascript" src="js/pwdmeter.js" language="javascript"></script>  
</head>
<body>
    <th colspan="2" class="txtCenter">Test Your Password</th>
        <th class="txtCenter">Minimum Requirements</th>
    </tr>
        <tr>
            <th>Password:</th>
             <td>
                <input type="text" id="passwordTxt" name="passwordTxt" autocomplete="off" onkeyup="chkPass(this.value);" class="hide" />
                    </td>
                <tr>
                    <th>Hide:</th>
                    <td><input type="checkbox" id="mask" name="mask" value="1" checked="checked" onclick="togPwdMask();" /></td>
                </tr>
                <tr>
                    <th>Score:</th>
                    <td>
                        <div id="scorebarBorder">
                        <div id="score">0%</div>
                        <div id="scorebar">&nbsp;</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Complexity:</th>
                    <td><div id="complexity">Too Short</div></td>
                </tr>
            </table>
            <table id="tablePwdStatus" cellpadding="5" cellspacing="1" border="0" style="display:none">
                <tr>
                    <td width="1%"><div id="div_nLength" class="fail">&nbsp;</div></td>
                    <td width="94%">Number of Characters</td>
                    <td width="1%" class="txtCenter">Flat</td>
                    <td width="1%" class="txtCenter italic">+(n*4)</td>
                    <td width="1%"><div id="nLength" class="box">&nbsp;</div></td>
                    <td width="1%"><div id="nLengthBonus" class="boxPlus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nAlphaUC" class="fail">&nbsp;</div></td>
                    <td>Uppercase Letters</td>
                    <td class="txtCenter">Cond/Incr</td>
                    <td nowrap="nowrap" class="txtCenter italic">+((len-n)*2)</td>
                   <td><div id="nAlphaUC" class="box">&nbsp;</div></td>
                    <td><div id="nAlphaUCBonus" class="boxPlus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nAlphaLC" class="fail">&nbsp;</div></td>
                    <td>Lowercase Letters</td>
                    <td class="txtCenter">Cond/Incr</td>
                    <td class="txtCenter italic">+((len-n)*2)</td>
                    <td><div id="nAlphaLC" class="box">&nbsp;</div></td>
                    <td><div id="nAlphaLCBonus" class="boxPlus">&nbsp;</div></td>
                </tr>
                <tr>
                    <td><div id="div_nNumber" class="fail">&nbsp;</div></td>
                    <td>Numbers</td>
                    <td class="txtCenter">Cond</td>
                    <td class="txtCenter italic">+(n*4)</td>
                    <td><div id="nNumber" class="box">&nbsp;</div></td>
                    <td><div id="nNumberBonus" class="boxPlus">&nbsp;</div></td>
                </tr>
                <tr>
                    <td><div id="div_nSymbol" class="fail">&nbsp;</div></td>
                    <td>Symbols</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">+(n*6)</td>
                    <td><div id="nSymbol" class="box">&nbsp;</div></td>
                    <td><div id="nSymbolBonus" class="boxPlus">&nbsp;</div></td>
                </tr>
                <tr>
                    <td><div id="div_nMidChar" class="fail">&nbsp;</div></td>
                    <td>Middle Numbers or Symbols</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">+(n*2)</td>
                    <td><div id="nMidChar" class="box">&nbsp;</div></td>
                    <td><div id="nMidCharBonus" class="boxPlus">&nbsp;</div></td>
                </tr>
                <tr>
                    <td><div id="div_nRequirements" class="fail">&nbsp;</div></td>
                    <td>Requirements</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">+(n*2)</td>
                    <td><div id="nRequirements" class="box">&nbsp;</div></td>
                    <td><div id="nRequirementsBonus" class="boxPlus">&nbsp;</div></td>
                </tr>
                <tr>
                    <th colspan="6">Deductions</th>
                </tr>
                <tr>
                    <td width="1%"><div id="div_nAlphasOnly" class="pass">&nbsp;</div></td>
                    <td width="94%">Letters Only</td>
                    <td width="1%" class="txtCenter">Flat</td>
                    <td width="1%" class="txtCenter italic">-n</td>
                    <td width="1%"><div id="nAlphasOnly" class="box">&nbsp;</div></td>
                    <td width="1%"><div id="nAlphasOnlyBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nNumbersOnly" class="pass">&nbsp;</div></td>
                    <td>Numbers Only</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-n</td>
                    <td><div id="nNumbersOnly" class="box">&nbsp;</div></td>
                    <td><div id="nNumbersOnlyBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nRepChar" class="pass">&nbsp;</div></td>
                    <td>Repeat Characters (Case Insensitive)</td>
                    <td class="txtCenter">Comp</td>
                    <td nowrap="nowrap" class="txtCenter italic"> - </td>
                    <td><div id="nRepChar" class="box">&nbsp;</div></td>
                    <td><div id="nRepCharBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nConsecAlphaUC" class="pass">&nbsp;</div></td>
                    <td>Consecutive Uppercase Letters</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*2)</td>
                    <td><div id="nConsecAlphaUC" class="box">&nbsp;</div></td>
                    <td><div id="nConsecAlphaUCBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nConsecAlphaLC" class="pass">&nbsp;</div></td>
                    <td>Consecutive Lowercase Letters</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*2)</td>
                    <td><div id="nConsecAlphaLC" class="box">&nbsp;</div></td>
                    <td><div id="nConsecAlphaLCBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nConsecNumber" class="pass">&nbsp;</div></td>
                    <td>Consecutive Numbers</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*2)</td>
                    <td><div id="nConsecNumber" class="box">&nbsp;</div></td>
                    <td><div id="nConsecNumberBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nSeqAlpha" class="pass">&nbsp;</div></td>
                    <td>Sequential Letters (3+)</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*3)</td>
                    <td><div id="nSeqAlpha" class="box">&nbsp;</div></td>
                    <td><div id="nSeqAlphaBonus" class="boxMinus">&nbsp;</div></td>
                 </tr>  
                 <tr>
                    <td><div id="div_nSeqNumber" class="pass">&nbsp;</div></td>
                    <td>Sequential Numbers (3+)</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*3)</td>
                    <td><div id="nSeqNumber" class="box">&nbsp;</div></td>
                    <td><div id="nSeqNumberBonus" class="boxMinus">&nbsp;</div></td>
                </tr>  
                <tr>
                    <td><div id="div_nSeqSymbol" class="pass">&nbsp;</div></td>
                    <td>Sequential Symbols (3+)</td>
                    <td class="txtCenter">Flat</td>
                    <td class="txtCenter italic">-(n*3)</td>
                    <td><div id="nSeqSymbol" class="box">&nbsp;</div></td>
                    <td><div id="nSeqSymbolBonus" class="boxMinus">&nbsp;</div></td>
                 </tr>    
</body>
</html>
