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
```
