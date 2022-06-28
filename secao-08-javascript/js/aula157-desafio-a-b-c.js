var a = 10
var b = 20
var c = null // Variável auxiliar utilizada na lógica

document.write('A: ' + a + '<br>')
document.write('B: ' + b + '<br>')
document.write('C: ' + c + '<br>')

document.write('<hr>')

// Lógica de inversão dos valores das variáveis A e B
c = a
a = b
b = c
c = null

//
document.write('A: ' + a + '<br>')
document.write('B: ' + b + '<br>')
document.write('C: ' + c + '<br>')