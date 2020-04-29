import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  title = 'CalcMédia | Angular';

  name: string = "";
  p1: number;
  p2: number;
  p3: number;
  p3MinResultado: number = 0;
  mediaResultado: number = 0;
  resultadoText: string = "...";
  mediaMinima = 6.2;

  constructor() { }

  ngOnInit() {}

  calculoMedia() {
    this.mediaResultado = (this.p1 * 0.25) + (this.p2 * 0.25) + (this.p3 * 0.5);
    this.resultadoText = this.mediaResultado >= this.mediaMinima ? "Aluno aprovado :)" : "Aluno reprovado :(";
    return this.mediaResultado.toFixed(2) && this.resultadoText;
  }

  calculoP3Min() {
    this.p3MinResultado = (this.mediaMinima - (this.p1 * 0.25) - (this.p2 * 0.25)) / 0.5;
    return this.p3MinResultado.toFixed(2);;
  }

  limparDados() {
    this.name = "";
    this.p1 = null;
    this.p2 = null;
    this.p3 = null;
    this.p3MinResultado = 0;
    this.mediaResultado = 0;
    this.resultadoText = "...";
  }

}
