<%
 
'//=====================================================
'//= -------
'//=        Sub Created 2006-07-10
'//=        Joe Crawford
'//=
'//=        Function to creating <select> boxes, returns a string with the text of the select box
'//=        It must be "Response.Write"'d to get display'//=
'//=
'//=        Parameters:
'//=                    strName = the NAME value of the select box. Required.
'//=                    strValue = if editing, the VALUE of an already selected box, required, but may be blank string. Required.
'//=                    arrOfValues = array of values in order. Required.
'//=                    arrOfDisplayed = array of displayed text in the same order as the array of values. Required.
'//=                    strAdditionalAttributes = additional text for inclusion in the <select> tag (for example id, class, onchange, etc). Required.
'//=
'//= -------
' Usage
' Dim valArray, displayArray
' valArray = Array(13, 5, 3, 15, 11, 6, 14, 7, 4, 2, 10, 16, 8, 1, 12, 9, 17)
' displayArray = Array("Curriculum" ,"Electives" ,"English" ,"Enrichment" ,"Fine Arts" ,"Foreign Languages" ,"Grade School Package" ,"Health" ,"History" ,"Kindergarten" ,"Math" ,"Packages" ,"Physical Education" ,"Pre-Kindergarten" ,"Science" ,"Social Sciences" ,"Special Items")
' Response.Write selectBox("variable_name","2",valArray,displayArray," class='whatever' ")
 
' Output
' <select name="variable_name"  class='whatever' >
' <option value="13">Curriculum</option>
' <option value="5">Electives</option>
' <option value="3">English</option>
' <option value="15">Enrichment</option>
' <option value="11">Fine Arts</option>
' <option value="6">Foreign Languages</option>
' <option value="14">Grade School Package</option>
' <option value="7">Health</option>
' <option value="4">History</option>
' <option value="2">Kindergarten</option>
' <option value="10">Math</option>
' <option value="16">Packages</option>
' <option value="8">Physical Education</option>
' <option value="1">Pre-Kindergarten</option>
' <option value="12">Science</option>
' <option value="9">Social Sciences</option>
' <option value="17">Special Items</option>
' </select>
'//=====================================================
Function selectBox(strName,strValue,arrOfValues,arrOfDisplayed,strAdditionalAttributes)
            Dim strOut
            strOut = ""
            strOut = strOut & "<select name=""" & strName & """ " & strAdditionalAttributes & ">" & vbCrLf
            '// If the arrays are valid, then they display a list of courses
            if isArray(arrOfValues) and isArray(arrOfDisplayed) and (UBound(arrOfValues) = UBound(arrOfDisplayed))Then
                        Dim i
                        For i=0 to UBound(arrOfValues)
                                    strOut = strOut & "<option value="""
                                    strOut = strOut & Server.HTMLEncode(arrOfValues(i))
                                    strOut = strOut & """"
                                    If cStr(arrOfValues(i)) = cStr(strValue) Then
                                                strOut = strOut & " selected "
                                    End If
                                    strOut = strOut & ">"
                                    strOut = strOut & Server.HTMLEncode(arrOfDisplayed(i))
                                    strOut = strOut & "</option>" & vbCrLf
                        Next
            '// If the arrays are not valid, you get these errors
            Else
                        strOut = strOut & "<option>Error invoking selectBox:</option>"
                        strOut = strOut & "<option>Not A Valid Array</option>"
                        strOut = strOut & "<option>or</option>"
                        strOut = strOut & "<option>Value/Display array</option>"
                        strOut = strOut & "<option>length mismatch</option>"
            End if
            strOut = strOut & "</select>" & vbCrLf
            selectBox = strOut
End Function
 
 
%>