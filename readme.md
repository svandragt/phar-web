How to create a phar archive that's a portable PHP executable that can be served as a website (or contains a http server)?

# Requirements

1. [humbug/box](https://box-project.github.io/box/). This is used to manage phar file creation.
   a. If you have [phive](https://github.com/phar-io/phive) installed, install box by running `phive install`. 
2. (optional)[Taskfile](https://github.com/svandragt/taskfile). This is used as a task runner. Alternatively read the .Taskfile and execute the contents manually, it's bash.

# Anatomy

```
.
├── bootstrap.php
├── build
│   └── index.phar
└── src
    └── index.php

```

The `src` directory contains the source files of the PHP project. Box compiles a `build/index.phar`, which is included by the `bootstrap.php` file.

# Building the phar

```shell
# Compile in the build/ directory for inspection
t compile

# Compile and run via the commandline:
t crun

# Compile and serve
t cserve
```

