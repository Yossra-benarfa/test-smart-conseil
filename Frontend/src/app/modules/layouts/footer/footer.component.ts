import { Component, OnDestroy, OnInit } from '@angular/core';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.scss']
})
export class FooterComponent implements OnInit, OnDestroy {

  currentYear: number = new Date().getFullYear();

  constructor() {
  }

  ngOnInit() {
  }

  ngOnDestroy(): void { }
}
