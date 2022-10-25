<?php

        /**
         * git: version control system
         * github: site appear cloud for remote repositories
         * advantages git:
             * allow contribute the project and organize team
             * revert change any time and merge branch and solve conflicts

         * connect with project:
             * git clone url: get project from remote repository
             * git pull remoteName: get changes from remote repository

             * git init
                 * git add <file>: to add|update file to|on staging area  | add . add *
                 * git rm --cached <file>: to remove file to staging area
                 * git commit -m "message": to move file to local repository
             * git branch -M main
             * git remote add origin <url>
             * git push <remoteName> <branchName>: to move changes branch to remote repository
             * git push -u <remoteName> <branchName>: to move changes also but you solve conflict firstly ==> pull then push
                * push from main branch sending as push but from another branch sending as pull request

         * helpers:
             * git status: to show status of all files

            ** branches **
             * git branch: to show branches of project
             * git branch <branchName>: to create branch in project
             * git checkout -b <branchName>: to create branch and switch to it
             * git checkout <branchName>: to switch to branch in project
             * git branch -m <branchName>: to rename branch
             * git branch -D <branchName>: to delete branch
             * git branch -d <branchName>: to delete branch  but not delete if exist changes not merge
             * git merge <branchName>: to merge branchName with current branch

            ** stash **
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

             * git log: to show history of commits
             * git reset --head commitID: to move head to commit

             * git remote: to show remotes name of project
             * git remote -v: to show remotes name with url of project

             * git config --global alias.<name> value : to create alias for value and must be in "" if content space

             * gitignore: create file ".gitignore" and put any of:
                * <extension>: for ignore all files that its extension is <extension>
                * <!file>: for non ignore file already ignore
                * <file>: for ignore file
                * <directory/>: for ignore directory

             * git tag: to show tags
             * git tag <tageName>: to create tag
             * git tag -a <tageName> -m <messages>: to create tag with annotation
             * git push <remoteName> <tageName>: to move changes tage to remote repository but will apply for all tags


         * common:
             * cd <url>: change directory
             * mkdir <url>: make directory
             * touch <file>: create file
             * touch: create file
         * common:
             * cd <url>: change directory
             * mkdir <url>: make directory
             * touch <file>: create file
             * touch: create file

         */

        /*

             1) upload project:
                 git init
                 an operation
                 git branch -M main
                 git remote add origin <url>
                 git push -u origin main

             2) download project:
                 git clone <url>

             3) to pull changes from repository
                git pull remoteName




         */