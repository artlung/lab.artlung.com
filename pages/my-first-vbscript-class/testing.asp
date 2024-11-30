<%

Dim oTestClassObject
Set oTestClassObject = New TestClass
oTestClassObject.a = 12
oTestClassObject.b = 5

oTestClassObject.PrintMyself
oTestClassObject.SetFactor = 100
oTestClassObject.PrintMyself
oTestClassObject.SetFactor = 0
oTestClassObject.PrintMyself
oTestClassObject.SetFactor = 10
oTestClassObject.PrintMyself
 
%>