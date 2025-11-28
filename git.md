# Git Practice Plan – 2 Weeks to Master Merge Conflicts

(Just the practice part – nothing else)

```bash
# ── WEEK 1: Deliberate Drills (30–60 min per day) ──

Day 1–2
→ Complete this free interactive lab (zero setup):
  https://github.com/skills/resolve-merge-conflicts

Day 3–7
→ Create a sandbox repo called “git-practice”
→ Every day, repeat this cycle 15 times until it takes you <3 minutes:

1. git checkout main && git pull
2. git checkout -b feature/a
   git checkout -b feature/b
3. Edit the SAME 5–10 lines in the same file differently on both branches
4. git checkout main
   git merge feature/a
   git merge feature/b    → forces conflicts
5. Resolve using VS Code (try inline view + 3-way Merge Editor)
6. Also force & resolve conflicts in package.json + lockfile at least 5×

# ── WEEK 2: Real-World Muscle Memory (do this every single morning on your actual work) ──

git fetch origin
git rebase origin/main     # ← fix any conflicts IMMEDIATELY while they’re tiny

→ Do this 10 working days in a row.
→ After day 10 you will legitimately be faster and calmer than 95% of developers (including your senior).

# Bonus Daily Flow Once You’re Done Training
git fetch origin
git rebase origin/main          # fix conflicts while tiny
# code all day
git push --force-with-lease     # safe force if you rebased
# Open PR

That’s it. Do exactly this for 14 days and merge conflicts will never scare you again.

php -S 127.0.0.1:8000 -t "/Users/calvingaiennie/Documents/GitHub/GitStuff"


Goal 1: Make your local branches exactly match the remote (delete local branches that no longer exist remotely, create new ones, and reset existing ones)
# 1. Fetch all remote information (branches, deletions, etc.)
git fetch --all --prune

# 2. (Optional but recommended) Prune deleted remote-tracking branches
# --prune is already done above, but you can also run it separately
git remote prune origin

# 3. Delete local branches that no longer exist on remote
git fetch --prune origin
git branch -vv | grep ': gone]' | awk '{print $1}' | xargs git branch -D

# 4. Create/update local branches to track all remote branches
for branch in $(git branch -r | grep 'origin/' | grep -v HEAD | sed 's/origin\///'); do
  git checkout -b $branch origin/$branch 2>/dev/null || git checkout $branch
  git reset --hard origin/$branch
done


How to Merge a Branch Into Main`
# 1. Make sure you're on the latest main
git checkout main
git pull origin main          # or git pull if you're already set up

# 2. Merge your feature branch into main
git merge --no-ff feature/a

# 3. (Optional but recommended) Check everything looks good
git status
git log --oneline --graph     # see the merge commit

# 4. Push the updated main to the remote repository
git push origin main


DELETE LOCAL BRANCHES THAT HAVE BEEN MERGED
git branch --merged | grep -v "\*" | grep -v "main" | grep -v "master" | grep -v "develop" | xargs git branch -d
```
