SELECT MAX(salary) FROM emp WHERE salary < (SELECT MAX(salary) FROM emp);

SELECT salary FROM (SELECT DISTINCT salary FROM emp ORDER BY salary DESC LIMIT 2) AS emp ORDER BY salary LIMIT 1;