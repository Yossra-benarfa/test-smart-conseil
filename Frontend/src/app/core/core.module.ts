import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LayoutsModule } from '../modules/layouts/layouts.module';
import { CoreRoutingModule } from './core-routing.module';
import { BlogsComponent } from './components/blogs/blogs.component';
import { BlogCardComponent } from './components/blogs/blog-card/blog-card.component';



@NgModule({
  declarations: [
    BlogsComponent,
    BlogCardComponent
  ],
  imports: [
    CommonModule,
    LayoutsModule,
    CoreRoutingModule,
  ]
})
export class CoreModule { }
