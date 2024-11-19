# Todo API

API для управления задачами (Todo). Этот API предоставляет стандартные операции CRUD (создание, чтение, обновление и удаление).


### **1. Установка в Linux**
**Запуск миграций:** sudo docker-compose run artisan module:migrate User TodoStatus Todo --seed
**Запуск docker** [sudo docker-compose up -d]
**Вход в pgadmin** (http://localhost:5050) Логин: appsklimov@yandex.ru пароль: leadadmin
**Распложение** Программный кодый распогается в src/Modules
**URL** Запросы API работают через адрес (http://localhost:8668/api/v1/todo/)

---

## **Список маршрутов**

| Метод      | URI                   | Название маршрута   | Описание                                   |
|------------|-----------------------|---------------------|-------------------------------------------|
| `GET`      | `/api/v1/todo`        | `api.todo.index`    | Получение списка задач                   |
| `POST`     | `/api/v1/todo`        | `api.todo.store`    | Создание новой задачи                    |
| `PUT/PATCH`| `/api/v1/todo/{todo}` | `api.todo.update`   | Обновление данных задачи                 |
| `DELETE`   | `/api/v1/todo/{todo}` | `api.todo.destroy`  | Удаление задачи                          |

---

## **Описание маршрутов**

### **2. Получение списка задач**
**Метод:** `GET /api/v1/todo`
**Фильтр по статус** [array] status . Пример status[1, 2, 3]
- 1 Новая задача
- 2 В работе
- 3 Завершено
- 4 Отменено

**Соортировка ** [array] order, [string] order.0, [string] order.1
    order['deadline_at', 'asc'];

Возвращает список задач с возможностью фильтрации и пагинации.

