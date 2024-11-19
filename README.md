# Todo API

API для управления задачами (Todo). Этот API предоставляет стандартные операции CRUD (создание, чтение, обновление и удаление).


### **1. Установка в Linux**
**Запуск миграций:** sudo docker-compose run artisan module:migrate User TodoStatus Todo --seed <br>
**Запуск docker** [sudo docker-compose up -d] <br>
**Вход в pgadmin** (http://localhost:5050) Логин: appsklimov@yandex.ru пароль: leadadmin <br>
**Распложение** Программный кодый распогается в src/Modules <br>
**URL** Запросы API работают через адрес (http://localhost:8668/api/v1/todo/) <br>

---

## **Список маршрутов**

| Метод      | URI                   | Название маршрута   | Описание                                   |
|------------|-----------------------|---------------------|-------------------------------------------|
| `GET`      | `/api/v1/todo`        | `api.todo.index`    | Получение списка задач                   |
| `POST`     | `/api/v1/todo`        | `api.todo.store`    | Создание новой задачи                    |
| `PUT/PATCH`| `/api/v1/todo/{todo}` | `api.todo.update`   | Обновление данных задачи                 |
| `DELETE`   | `/api/v1/todo/{todo}` | `api.todo.destroy`  | Удаление задачи                          |

---

**Фильтр по статусу** <br/> 
[array] status <br/>
Пример status[1, 2, 3] <br>
- 1 Новая задача <br>
- 2 В работе <br>
- 3 Завершено <br>
- 4 Отменено <br>

**Соортировка** <br>
[array] order, <br>
[string] order.0, <br>
[string] order.1 <br>
order['deadline_at', 'asc'];

Возвращает список задач с возможностью фильтрации и пагинации.

