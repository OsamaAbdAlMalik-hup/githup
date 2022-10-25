<?php

        /**
         * git: version control system
         * github: site appear cloud for remote repositories
         * advantages git:
             * allow contribute the project and organize team
             * revert change any time and merge branch and solve conflicts

         * operations:
             * git clone url: get project from remote repository
             * git pull remoteName: get changes from remote repository
             * git add <file>: to add|update file to|on staging area  | add . add *
             * git rm --cached <file>: to remove file to staging area
             * git commit -m "message": to move file to local repository
             * git push <remoteName> <branchName>: to move changes branch to remote repository
             * git push -u <remoteName> <branchName>: to move changes also but you solve conflict firstly

         * helpers:
             * git status: to show status of all files

             * git branch: to show branches of project
             * git branch <branchName>: to create branch in project
             * git checkout -b <branchName>: to create branch and switch to it
             * git checkout <branchName>: to switch to branch in project
             * git branch -m <branchName>: to rename branch
             * git branch -D <branchName>: to delete branch
             * git branch -d <branchName>: to delete branch  but not delete if exist changes not merge
             * git merge <branchName>: to merge branchName with current branch

             * git stash: to save changes in stash to be invisible
             * git stash save "name": to save changes in stage with name
             * git stash list: to show invisible changes
             * git stash show: to show files of all changes
             * git stash show stash@{i}: to show files of changes in {i}
             * git stash pop: to retrieve last changes from stash and remove from stash
             * git stash apply: to apply changes from stash but not remove from stash
             * git stash drop: to remove changes from stash
             * git stash pop stash@{i}: to retrieve changes in {i} remove from stash
             * git stash apply stash@{i}: to retrieve changes in {i} but not remove from stash
             * git stash drop stash@{i}: to remove changes in {i} from stash
             * git stash clear: to remove stash


             * git remote: to show remotes name of project
             * git remote -v: to show remotes name with url of project
             * git remote -v: to show remotes name with url of project

             * git config --global alias.<name> value : to create alias for value and must be in "" if content space



         * common:
             * cd <url>: change directory
             * mkdir <url>: make directory
             * touch <file>: create file
             * touch: create file

         */