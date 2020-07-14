# rccac_web
## 项目来源
学生实习期间为实习公司策划的公司主页,是一个半成品，仅供学习参考。
## 技术选型
### 前端
- html+css+js
- jquery
### 后端
- php
### 主要实现功能
- 导航菜单
- 轮播图
- pdf文件预览
### 项目结构

```
├── banner                      // 主页小轮播图的图片
├── bigbanner                   // 主页大轮播图的图片
├── css                         // 样式
├── img                         //logo和箭头
├── js                          //jquery.js和pdfobject.js
├── organization chart          //组织结构图
├── pdf                         //测试用的pdf文件
├── staff                       //测试用的员工图片
├── announce.php
├── briefintro.php
├── employee.php
├── index.php
├── policyprocedure.php
├── view.php                     //pdf展示页面
└── README.md
```

### 设计说明
- php脚本扫描文件夹下资源实现图片、pdf文件的动态生成对应页面
- html和css由于当时能力不足，并没有解耦，存在较多重复
### 网页预览
网址:<http://49.234.96.117/rccac2/index.php>
