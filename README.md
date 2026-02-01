# Learn PHP 🐘

A comprehensive collection of PHP learning exercises, examples, and concept implementations with detailed code comments. 
Each file demonstrates core PHP concepts through practical examples and clear explanations.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue.svg)

## 📋 Table of Contents
- [About](#about)
- [Repository Structure](#repository-structure)
- [Learning Path](#learning-path)
- [Getting Started](#getting-started)
- [Project Structure](#project-structure)
- [How to Use This Repository](#how-to-use-this-repository)
- [Topics Covered](#topics-covered)
- [Contributing](#contributing)
- [Resources](#resources)
- [License](#license)

## 📖 About

This repository documents my journey in learning PHP from basics to advanced concepts. Each file contains practical code examples with detailed comments explaining:

- **What** the code does
- **Why** it's written that way
- **How** it can be used in real applications
- **Common pitfalls** and best practices

## 🗂️ Repository Structure

```
learn-php/
├── 01-basics/           # Fundamental PHP concepts
│   ├── variables.php
│   ├── data-types.php
│   ├── operators.php
│   └── control-structures.php
├── 02-functions/        # Functions and scope
│   ├── basic-functions.php
│   ├── parameters.php
│   └── anonymous-functions.php
├── 03-arrays/           # Array manipulation
│   ├── indexed-arrays.php
│   ├── associative-arrays.php
│   └── array-functions.php
├── 04-strings/          # String operations
├── 05-oop/              # Object-Oriented Programming
│   ├── classes-objects.php
│   ├── inheritance.php
│   ├── interfaces.php
│   └── traits.php
├── 06-database/         # Database operations
│   ├── pdo-connection.php
│   ├── mysqli-basics.php
│   └── prepared-statements.php
├── 07-form-handling/    # Form processing
├── 08-sessions-cookies/ # User state management
├── 09-error-handling/   # Exception handling
├── 10-file-handling/    # File operations
├── projects/            # Mini projects
│   ├── calculator.php
│   ├── todo-list/
│   └── blog-system/
└── utils/               # Helper files
    ├── config.php
    └── helpers.php
```

## 🚀 Learning Path

### **Level 1: Foundations** (Weeks 1-2)
- PHP syntax and basics
- Variables and data types
- Operators and expressions
- Control structures (if, switch, loops)

### **Level 2: Core Concepts** (Weeks 3-4)
- Functions and scope
- Arrays and array functions
- String manipulation
- Superglobals ($_GET, $_POST, $_SESSION)

### **Level 3: Intermediate** (Weeks 5-6)
- Object-Oriented Programming
- File handling
- Error and exception handling
- Form validation

### **Level 4: Advanced** (Weeks 7-8)
- Database operations (PDO, MySQLi)
- Authentication and authorization
- REST API basics
- Security best practices

## 💻 Getting Started

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- MySQL/MariaDB (for database examples)
- Git

### Installation
```bash
# Clone the repository
git clone https://github.com/KabileshwaranKabil/learn-php.git

# Navigate to the directory
cd learn-php

# Start PHP built-in server
php -S localhost:8000
```

### Running Examples
Each file can be run independently:
```bash
# Run a specific example
php 01-basics/variables.php

# Or open in browser
# http://localhost:8000/01-basics/variables.php
```

## 🔧 Project Structure Details

### **Basics**
- **variables.php**: Variable declaration, scope, and best practices
- **data-types.php**: All PHP data types with examples
- **control-structures.php**: If-else, switch, loops with practical use cases

### **Functions**
- Function declaration and invocation
- Parameters and return types
- Anonymous functions and closures
- Callback functions

### **OOP**
- Classes, objects, and properties
- Inheritance and polymorphism
- Interfaces and abstract classes
- Magic methods and traits

### **Database**
- PDO connections and configuration
- CRUD operations
- Prepared statements (security focused)
- Transactions and error handling

## 📚 How to Use This Repository

### For Learners
1. Start with basics folder and work sequentially
2. Read comments carefully - they explain the "why" behind code
3. Modify examples to experiment with different outcomes
4. Create your own variations of the examples

### For Reviewers
- Each file is self-contained and can be reviewed independently
- Comments explain learning objectives and key takeaways
- Code follows consistent formatting and commenting style

### For Contributors
See [Contributing Guidelines](#contributing)

## 📝 Topics Covered

### ✅ **Completed**
- [x] Basic Syntax and Tags
- [x] Variables and Constants
- [x] Data Types (Scalar, Compound, Special)
- [x] Operators (Arithmetic, Comparison, Logical)
- [x] Control Structures
- [x] Functions
- [x] Arrays
- [x] Strings
- [x] Superglobals

### 🔄 **In Progress**
- [ ] Advanced OOP Patterns
- [ ] Design Patterns
- [ ] API Development
- [ ] Testing (PHPUnit)

### 📅 **Planned**
- [ ] Laravel Basics
- [ ] Composer and Dependency Management
- [ ] PHP Frameworks Comparison
- [ ] Performance Optimization


## 🤝 Contributing

Contributions are welcome! If you have:

1. **Found a bug** or issue in any example
2. **Improved explanations** or comments
3. **Added new examples** for uncovered topics
4. **Enhanced code quality** or best practices

### How to contribute:
```bash
# Fork the repository
# Create a feature branch
git checkout -b feature/new-example

# Make your changes
# Commit with descriptive message
git commit -m "Add: File upload handling example"

# Push to your fork
git push origin feature/new-example

# Create a Pull Request
```

### Contribution Guidelines:
- Follow existing code style and commenting patterns
- Test your examples before submitting
- Update README if adding new sections
- Keep examples focused on single concepts

## 📚 Resources

### Learning Resources
- [PHP Official Documentation](https://www.php.net/docs.php)
- [PHP: The Right Way](https://phptherightway.com/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [Laracasts PHP Fundamentals](https://laracasts.com/series/php-for-beginners)

### Tools & Extensions
- [VS Code PHP Extension Pack](https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode)
- [XAMPP](https://www.apachefriends.org/) - Local PHP environment
- [PHPStorm](https://www.jetbrains.com/phpstorm/) - PHP IDE

### Books
- "PHP & MySQL: Server-side Web Development" by Jon Duckett
- "Modern PHP" by Josh Lockhart
- "PHP Objects, Patterns, and Practice" by Matt Zandstra

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

<div align="center">
  
**Happy Coding!** 🚀

*"The only way to learn a new programming language is by writing programs in it."* - Dennis Ritchie

[![GitHub stars](https://img.shields.io/github/stars/KabileshwaranKabil/learn-php?style=social)](https://github.com/KabileshwaranKabil/learn-php/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/KabileshwaranKabil/learn-php?style=social)](https://github.com/KabileshwaranKabil/learn-php/network/members)

</div>