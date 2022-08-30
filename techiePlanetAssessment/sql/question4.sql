SELECT
    DISTINCT `userId` UserId,
    ROUND(AVG(`duration`)) AverageDuration
FROM
    `sessions`
GROUP BY
    `userId`
HAVING
    count(userId) > 1;