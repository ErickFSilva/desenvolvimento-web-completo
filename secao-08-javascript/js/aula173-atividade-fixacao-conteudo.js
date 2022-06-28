var nome = prompt('Informe o seu nome:')
var altura = prompt('Informe a sua altura: (Em centrímetros)')
var peso = prompt('Informe o seu peso:')
var classificacao

parseFloat(altura /= 100)
parseFloat(peso)

var massa = peso / (altura * altura)

if (massa < 16) {
    classificacao = 'Baixo peso, muito grave'
}
else if (massa >= 16 && massa < 17) {
    classificacao = 'Baixo pesso, grave'
}
else if (massa >= 17 && massa < 18.5) {
    classificacao = 'Baixo peso'
}
else if (massa >= 18.5 && massa < 25) {
    classificacao = 'Peso normal'
}
else if (massa >= 25 && massa < 30) {
    classificacao = 'Sobrepeso'
}
else if (massa >= 30 && massa < 35) {
    classificacao = 'Obesidade grau I'
}
else if (massa >= 35 && massa < 40) {
    classificacao = 'Obesidade grau II'
}
else if (massa >= 40) {
    classificacao = 'Obesidade grau III'
}

document.write('<strong>' + nome + '</strong> possui índice de massa corporal igual a ' + massa + ', sendo classificado como: <strong>' + classificacao + '</strong>')