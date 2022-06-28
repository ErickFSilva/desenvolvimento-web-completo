function soma(a, b, c, d) {
    
    a = a === undefined ? 0 : a
    b = b === undefined ? 0 : b
    c = c === undefined ? 0 : c
    d = d === undefined ? 0 : d

    return a + b + c + d

}

console.log(soma(7, 7))
console.log(soma(7, 7, 9, 15)) // O javascript desconsidera os parâmetros adicionais
console.log(soma(7)) // retornará um "not a number"
console.log(soma())