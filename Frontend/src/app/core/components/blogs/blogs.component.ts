import { Component, OnInit } from '@angular/core';
import { Article } from 'src/app/modules/interfaces/article.model';
import { BlogService } from '../../services/blog.service';

@Component({
  selector: 'app-blogs',
  templateUrl: './blogs.component.html',
  styleUrls: ['./blogs.component.css']
})
export class BlogsComponent implements OnInit {
  articles: Article[] = [];

  constructor(private blogService: BlogService) { }

  ngOnInit(): void {
    this.getBlogs();
  }

  getBlogs() {
    this.blogService.getArticles().subscribe(
      (articles) => {
        this.articles = articles;
        console.log('==>', articles);
        console.log(articles.length);
      })
  }
}
