<%
Option Explicit

'// My first VBScript Test Class
Class TestClass
 
            Public a
 
            Public b
 
            Private internal_Factor
 
            Public Property Get TheSum
                        TheSum = a+b
            End Property
 
            Public Property Get ATimes
                        ATimes = a*internal_Factor
            End Property
 
            Public Property Get BTimes
                        BTimes = b*internal_Factor
            End Property
 
            Public Property Let SetFactor(ByVal varFactorIn)
                        If IsNumeric(varFactorIn) Then
                                    internal_Factor = varFactorIn
                        Else
                                    internal_Factor = 1
                        End If
            End Property
 
            Public Property Get SetFactor
                        SetFactor = internal_Factor
            End Property
 
            Public Property Get PrintMyself
                        Response.Write "<br>"
                        Response.Write a & " + " & b & " = " & TheSum
                        Response.Write "<br>"
                        Response.Write "The factor is " & internal_Factor
                        Response.Write "<br>"
                        Response.Write "Factorized: " & ATimes & " " & BTimes & " = " & TheSum
            End Property
 
End Class

%>