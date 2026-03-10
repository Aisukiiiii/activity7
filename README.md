#Homework 6 and activity 7



```mermaid
erDiagram

    USERS {
        int id PK
        string name
        string email
        string password
        enum role
        int group_id FK
    }

    GROUPS {
        int id PK
        string name
        string level
    }

    COURSES {
        int id PK
        string course_key
        string title
        string cover
        text content
        string didactic_material
        int robotics_kit_id FK
    }

    ROBOTICS_KITS {
        int id PK
        string name
    }

    GROUP_COURSE {
        int id PK
        int group_id FK
        int course_id FK
    }

    GROUPS ||--o{ USERS : "has students"
    GROUPS ||--o{ GROUP_COURSE : "assigned"
    COURSES ||--o{ GROUP_COURSE : "included in"
    ROBOTICS_KITS ||--o{ COURSES : "used in"
