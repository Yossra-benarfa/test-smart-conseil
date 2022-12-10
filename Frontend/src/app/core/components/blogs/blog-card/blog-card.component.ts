import { Component, Input, OnInit } from '@angular/core';
import { Article } from 'src/app/modules/interfaces/article.model';

@Component({
  selector: 'app-blog-card',
  templateUrl: './blog-card.component.html',
  styleUrls: ['./blog-card.component.css']
})
export class BlogCardComponent implements OnInit {
  @Input()
  article: Article;
  constructor() { }

  ngOnInit(): void {
  }

}
