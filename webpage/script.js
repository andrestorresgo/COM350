function compararAulasOcupadas(db1, db2) {
    let aulasOcupadas1 = db1.filter(aula => aula.ocupada === true);
    let aulasOcupadas2 = db2.filter(aula => aula.ocupada === true);
    if (aulasOcupadas1.length !== aulasOcupadas2.length) {
        return false;
    }
    for (let i = 0; i < aulasOcupadas1.length; i++) {
        if (aulasOcupadas1[i].codigoAula !== aulasOcupadas2[i].codigoAula) {
            return false;
        }
    }
    return true;
}