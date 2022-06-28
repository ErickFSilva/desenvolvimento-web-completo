/**
 * Paradigma Procedural:
 * Chamada de procedimentos (procedures) para manipulação de dados.
 */

let a = 10
let b = 7
let operador = 'mult'

function calcular(a, b, operador) {

    if(operador === 'mult') {
        console.log(a * b)
    }

}

calcular(a, b, operador)


/**
 * Paradigma de Orientação a Objetos:
 * Estrutura de dados com comportamentos.
 */

class Calculadora { // Classe

    constructor() {
        this.a = 11 // Atributo
        this.b = 8 // Atributo
        this.operador = 'mult' // Atributo
    }

    calcular() { // Função

        if(this.operador === 'mult') {
            console.log(this.a * this.b)
        }

    }

}

let calculadora = new Calculadora()
calculadora.calcular()


/**
 * Os quatro pilares da orientação a objetos:
 *      1. Abstração;
 *      2. Encapsulamento;
 *      3. Herança;
 *      4. Polimorfismo;
 */