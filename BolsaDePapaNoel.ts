
export interface Regalo {
    name: string,
    peso: number,
}

class BolsaDePapaNoel {

    regalos: Regalo[] = []

    agregarRegalo(regalo: Regalo) {
        throw Error("Implement Method")
    }

    yaExiste(regalo: Regalo): boolean {
        throw Error("Implement Method")
    }

    pesoActual(): number {
        throw Error("Implement Method")
    }

    regaloMasPesado(): Regalo | undefined {
        throw Error("Implement Method")
    }
}

export default BolsaDePapaNoel