function soma() {
    var resultado = 0
    
    for(var i in arguments) {
        resultado += arguments[i]
    }

    return resultado
}

console.log(soma(7, 5, 3.2, 0.8, 'texto'))

/*
    Arguments: é uma instrução que existe para todas as funções JS, ela retorna algo muito parecido com um array contendo a relação de parâmetros passados para a função.

    Essa palavra reservada, "arguments", representa um objeto que é uma variável local disponível dentro da função. Então, para qualquer função podemos recuperar os parâmetros encaminhados àquela respequitiva função atravez desse objeto, que é uma variável local do escopo da função.
*/