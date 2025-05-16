# Doctrine


**Install Doctrine**
```composer require doctrine```

**Check .env connections**
```symfony var:export --multiline```

**Crear nueva entidad**
```symfony console make:entity```

**Validar schema**
```symfony console doctrine:schema:validate```


**To create the tables - create migrations!**
```symfony console make:migration```

**To list/view all migrations and its status**
```symfony console doctrine:migrations:list```

**To add/migrate migrations (tables)**
```symfony console doctrine:migrations:migrate```

**To SQL directly on cli**

```symfony console doctrine:query:sql 'SELECT * FROM doctrine_migration_versions'```

```symfony console doctrine:query:sql 'SELECT * FROM starship'```


# Fixtures Data
```composer require --dev orm-fixtures```


# Questions
* How to update an entity (table) to add new rows
